# Pagoda Box Quickstart for Wordpress

## Getting Started: Pulling From Pagoda Box

### The Easy Way

Because this quickstart utilizes [Git submodules](http://www.kernel.org/pub/software/scm/git/docs/git-submodule.html) a simple `git clone` isn't the easiest way to pull down the source.  Instead, issue the following command:

`git clone --recursive <pagoda_repo_url>`

### The Hard Way

If you already rushed into things and did a `git pull` you can do one of two things:

1. Delete the repository from your computer and pull it down from Pagoda Box again using the "easy" instructions.
2. Issue the following commands from your repository root and make it all better:

`git submodule init
 git submodule update
`
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