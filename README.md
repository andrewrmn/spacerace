##Running locally

You'll need to have a local server running php in order to run wordpress locally. I use MAMP Pro.

Open `wp-config.php` and edit database credentials

Open `gulpfile.js` and edit line 5 to make sure this matched your local dev environment URL, mine was http://local.spacerace/

In the terminal:

run `npm install`
run `gulp` to compile / watch for css and js updates

I use the `_dev` file in the theme folder for the scss and js, it compiles to the `build` folder in the theme folder
