#!/bin/bash

PROJECT_DIR="/var/www/html/app"
LOG_FILE="/var/log/deploy.log"
DATE=$(date '+%Y-%m-%d %H:%M:%S')

cd $PROJECT_DIR

# Vérifie si des mises à jour sont disponibles avant de faire git pull
UPDATES=$(git fetch --dry-run 2>&1)

if [ -z "$UPDATES" ]; then
    notify-send "${DATE} Pas de nouvelles mises à jour disponibles." >> $LOG_FILE
else
    notify-send "${DATE} Mise à jour disponible. Démarrage de git pull..." >> $LOG_FILE
    git pull origin main >> $LOG_FILE 2>&1
    
    if [ $? -eq 0 ]; then
        notify-send "${DATE} Mise à jour réussie." >> $LOG_FILE
    else
        notify-send "${DATE} Échec de la mise à jour." >> $LOG_FILE
    fi
fi
