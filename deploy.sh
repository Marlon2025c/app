#!/bin/bash

# Chemin du projet
PROJECT_DIR="/var/www/html/app"

# Chemin du fichier de log
LOG_FILE="/var/log/deploy.log"

# Date actuelle pour le log
DATE=$(date '+%Y-%m-%d %H:%M:%S')

# Se déplacer dans le répertoire du projet
cd $PROJECT_DIR

# Mettre à jour le projet et enregistrer les résultats dans le fichier de log
echo "[$DATE] Début de la mise à jour du projet..." >> $LOG_FILE
git pull origin main >> $LOG_FILE 2>&1

# Enregistrer le statut de la mise à jour
if [ $? -eq 0 ]; then
    echo "[$DATE] Mise à jour réussie." >> $LOG_FILE
else
    echo "[$DATE] Échec de la mise à jour." >> $LOG_FILE
fi
