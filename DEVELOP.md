# Developing for the Website

## Setup

Install an [Apache | Nginx] WebServer solution that supports PHP, such as [MAMP](https://www.mamp.info/en/) for development.

## Workflow

1. Make changes in the respective branch*.

2. Push changes to GitHub.

3. Create a Pull Request and Merge with Master.

3. Go to the [Website Admin Portal](https://assistivetech.scripts.mit.edu/admin) to pull changes from GitHub **Master Branch** onto the live server.

#### **NOTE: Never Push To Master Directly!*

## Hosting

The server runs on [scripts](https://scripts.mit.edu/), a service provided by [MIT SIPB](https://sipb.mit.edu/). All the files are present in the [Athena Locker](https://ist.mit.edu/lockers) associated with the Assistive Technology Group at MIT.

## Admin Portal

The admin portal uses Kerberos Authentication, only the owners of the Athena Locker can access this webpage. The portal requires certificates to be installed and the use of https. Since the server has no SSL certificates for the main page, you can access the portal at [https://assistivetech.scripts.mit.edu/admin](https://assistivetech.scripts.mit.edu/admin) instead of the regular link.

By default, admins are redirected to an HTTPS connection on port **444**, which is configured to accept certificates. If the user has no certificates, they will be presented with an error page.

During development, you can access the page as you normally would (without certificates) if it's hosted on [127.0.0.1](127.0.0.1).

In the case that the 444 port isn't accessed, a 401 Authentication Error will be raised.

The `<RequireAny>` and `Require` directives were added in Apache 2.4 and are in the mod_authz_core module (they are not available in Apache 2.2). During development, try to use modules available in Apache 2.2 rather than 2.4, for wider test environment support.

## Requirements

### PHP Extensions

Even though scripts supports the JSON PHP package, it isn't enabled by default. To use any such package that needs enabling, add the requirement with `extension = [extension name].so` into the `php.ini` file (the file should be in the directory of the PHP file using that extension).

Visit [enabling php extensions in scripts](https://scripts.mit.edu/faq/64/how-do-i-enable-additional-php-extensions) for more details.

## Tools

The folder `dev_tools` contains scripts that can help during development. Remember to run `chmod +x [filename]` to be able to execute any shell scripts.

#### grab_content.sh

This is a script that updates content files from the live website.
It is meant for getting a preview locally of the data that is uploaded onto the live site.

It currently grabs the contents of the following files from the live version of the site at [http://assistivetech.mit.edu/[filename]](http://assistivetech.mit.edu):

 - `content.json`
 - `teams.json`
