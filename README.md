Setup the local machine
---------------------------
- Download and Install the [Local by Flywheel app](https://getflywheel.com/layout/local-by-flywheel/) to manage the wordpress local sites.
- Create a new site in Local by Flywheel app.
- go to ~/Local Sites/[site-name]/app
- delete the public directory - you might need to stop the server before deleting the public directory
- move whatever else is in the app folder to somewhere else outside of the app folder
- app folder should be empty at this point
- in terminal go to the app folder
- Clone the repository without creating the parent directory (add dot): `git clone https://github.com/HamidBehnam/hamidev-wordpress-100.git .`
- move back those items that you temporarily moved from the app folder
- Go to app/public/wp-content/themes/[theme-name]/resources
- run `npm install`
- run `npm run build:dev:watch:progress` to generate the `dist` content
- Log in to the admin portal: `http://[the-site-url]/login`
- Activate the theme in the appearance section

Backup Database
-------------------------------
- In the Local By Flywheel app select the Database tab
- Click on the Open Adminer
- Select Import then select the output type, ex. Save, ...
- Click on the Export button.

Restore the Database
--------------------------
- In the Local By Flywheel app select the Database tab
- Click on the Open Adminer
- Before restoring the database click on `select wp_options`
- Copy the value for these 2 fields: `siteurl` and `home`
- Click on Import and select the backup file.
- Click on the Execute button
- Click on `select wp_options` again and reset the values that you copied before importing the database
- Go to the Local By Flywheel app shutdown the server and start it again.