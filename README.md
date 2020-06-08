#Setup the local machine
---------------------------
- Download and Install the [Local by Flywheel app](https://getflywheel.com/layout/local-by-flywheel/) to manage the wordpress local sites.
- Clone the repository: https://github.com/HamidBehnam/hamidev-wordpress-100.git
- Since Local by Flywheel needs the zip file to import the local site, download the repository as a zip file too: https://github.com/HamidBehnam/hamidev-wordpress-100/archive/master.zip 
- Import the zip file to local app
- Add the missing directories and files (also the hidden ones) from the cloned directory to the directory that Local by Flywheel has created (it's usually in the Local Sites folder).
- Go to the app/resources/[theme-name]
- run `npm install`
- `npm run build:dev:watch:progress` to generate the `dist` content