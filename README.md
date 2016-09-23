# grunt-wp-simple-plugin

> Create a simple WordPress plugin with [grunt-init][].

This is a customized and highly stripped down version of 10up's [grunt-wp-plugin][10up-gh], created for the personal use of me, [Mark Jaquith][mark]. See also [my fork of grunt-wp-plugin][my-fork] for a more full-featured plugin skeleton.

[mark]: http://markjaquith.com/
[10up-gh]: https://github.com/10up/grunt-wp-plugin/
[10up-gh]: https://github.com/markjaquith/grunt-wp-plugin/
[grunt-init]: http://gruntjs.com/project-scaffolding


## How do I install this?

```bash
npm install -g grunt-init
mkdir ~/.grunt-init
git clone https://github.com/markjaquith/grunt-wp-simple-plugin.git ~/.grunt-init/wp-simple-plugin
```

## How do I use this to generate a plugin?

```bash
mkdir /path/to/wp-content/plugins/your-plugin-slug
cd /path/to/wp-content/plugins/your-plugin-slug
grunt-init wp-simple-plugin
```

Then follow the prompts. Be sure to give your plugin a unique class name. e.g. `MTJ_Social_Sharing_Mullet_Explosion`.

## How do I use this to develop my plugin?

First, make sure you have `grunt-cli` installed.

```bash
npm install -g grunt-cli
```

Then, install the local packages, from within your plugin's directory:

```bash
npm install
```

To process everything:

```bash
grunt
```

## Notes

* Don't forget that the version numbers in your plugin are controlled by `package.json`. That's the main place to update it.

## Can I contribute?

I made this for myself, and as a learning tool for others who want to use Grunt to help with their plugin development. But if you find it useful, and think you can improve it, send me a pull request! As of this writing, I'm only going to pull in changes if I find them personally useful (i.e. don't send me a pull request to reïntigrate LESS support, because I don't use LESS).