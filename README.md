## Installing the app

1. Clone the project
2. Install Docker
   - For Windows machines, install an Ubuntu distribution
   - All the commands below should be run from the WSL2, not from Windows
3. Install composer using the command
    ```bash
   docker run --rm \
   -u "$(id -u):$(id -g)" \
   -v $(pwd):/var/www/html \
   -w /var/www/html \
   laravelsail/php81-composer:latest \
   composer install --ignore-platform-reqs
   ```
4. Create the ``.env`` file based on the ``.env.example``
5. Change the  env file as needed. Here can be changed the forwarded ports 
6. Use Sail to power the project ``./vendor/bin/sail up -d``
7. Run the required artisan commands
   - ``./vendor/bin/sail artisan key:generate``
   - ``./vendor/bin/sail artisan migrate``
   - ``./vendor/bin/sail artisan storage:link``
8. Run ``./vendor/bin/sail npm install`` to install node packages 
9. Run ``./vendor/bin/sail npm run dev`` to compile development assets.
10. Enjoy developing!



## Change log

### 02.02.2023
- removed font awesome from npm and added as kit to allow unlimited icons 
