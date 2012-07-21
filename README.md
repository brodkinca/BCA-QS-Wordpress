# Pagoda Box Quickstart for Wordpress

## Requirements

* Basic familiarity with the command line
* Development server where you customize Wordpress
* Pagoda Box account

## Getting Started

### 1. Pulling From Pagoda Box

#### The Easy Way

Because this quickstart utilizes [Git submodules](http://www.kernel.org/pub/software/scm/git/docs/git-submodule.html) a simple `git clone` isn't the easiest way to pull down the source.  Instead, issue the following command:

`git clone --recursive <pagoda_repo_url>`

#### The Hard Way

If you already rushed into things and did a `git pull` you can do one of two things:

1. Delete the repository from your computer and pull it down from Pagoda Box again using the "easy" instructions.
2. Issue the following commands from your repository root and make it all better:

`git submodule init
 git submodule update
`

### 2. Customizing wp-config.php

The included wp-config.php file includes some sensible defaults for an installation on Pagoda Box.

This includes auto-detecticting the Pagoda Box server and using the Pagoda-supplied database credentials.  If the config file cannot identify the server as Pagoda Box it will default to a secondary set of database credentials.  This is where you would fill in the connection info for your development server.  The values provided are designed for BCA's development servers, but you can use anything you like.

It is highly recommended that you generate your own values for the section labelled *Authentication Unique Keys and Salts* as you have an increased chance of being compromised if you use the same values as everyone else who uses this Quickstart.  Wordpress offers a nifty service to generate these values for you:

https://api.wordpress.org/secret-key/1.1/salt/

You may notice that above the Pagoda Box database credentials there is a constant defined that disables use of the updater in Wordpress.  Since the tool cannot be used sucessfully in Pagoda Box's read-only environment it is most user-friendly to remove the feature entirely.  If you like you can turn the updater on by setting DISALLOW_FILE_MODS to false.

### 3. Customize Wordpress

Because Pagoda Box is a read-only hosting environment, you must add themes and plugins on your development server and then deploy them to Pagoda Box.  There are two ways to do this:

#### Using the GUI

Navigate to Wordpress on your development server using your computer's browser.  Install any plugins and themes that you would like to be included in Wordpress.  It does not matter if you enable the plugins or themes as they will have to be reactivated on Pagoda Box after you deploy your blog.

#### Manually

Any plugins and themes can be manually added to the appropriate directories in `wp-content` and then deployed.  

**Advanced Users:** One advantage of manually managing plugins and themes is that they can also become submodules.  Just add the theme or plugin submodule, and you can use the same techniques to manage and update the extension as you do for Wordpress.

### 4. Deploy

Afer commiting all of your changes, you can deploy Wordpress to Pagoda Box just like any other repository by executing:

`git push origin master`

If you have the Pagoda command line tool installed you can execute:

`pagoda deploy`

## Why Submodules?

This quickstart is similar to other quickstarts for Wordpress except that it comes bundled with Wordpress as submodule.  If you are unfamiliar with submodules in Git you should refer to the [manual page](http://www.kernel.org/pub/software/scm/git/docs/git-submodule.html) on submodules.  The benefit of loading Wordpress as a submodule is that Wordpress's source is maintained in its own repository and your application's repository contains nothing other than the application's source code and a pointer to which version of Wordpress you're using.

## Upgrading Wordpress

When you want to upgrade to the latest version of Wordpress, just navigate to the hidden *wordpress* directory and issue the following command:

`git fetch --tags
git tag
`
This will ask Github for the versions of Wordpress available on the server.

To switch to a version, just issue the following command:

`git checkout <version>`

For instance, if you wanted version 3.4.1 you would execute this command:

`git checkout 3.4.1`

At this point you have the desired version of Wordpress and can test it in your local development environment.

But wait, we're not done yet! To continue using this new Wordpress version you have to tell your local repository that you've switched versions.  To do so simply navigate back to your main repository and issue this command:

`git commit wordpress -m 'Updated Wordpress'`

From now on your application will deploy with the current version!

**NOTE:** You may need to perform a database update before your site is usable!

=================================================

Brought to you by [Brodkin CyberArts](http://brodkinca.com)