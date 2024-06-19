#!/bin/bash
cd /home/u834651083/public_html

# Check for changes
if git diff-index --quiet HEAD --; then
    echo "No changes detected, exiting."
    exit 0
fi

# Add changes and commit
git add wp-content/plugins/
git add wp-content/themes/
git commit -m "Automated commit of changes from WordPress admin"

# Push changes
git push origin main
