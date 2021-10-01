# Bilby

Bilby is a stupidly simple pastebin for links. The data is saved in a plain text file. The contents of the file is displayed as a list.

## Dependencies

- PHP
- Web server (Apache, Lighttpd, or similar)
- Git (optional)

## Installation and Usage

1. Make sure that your local machine or remote web server has PHP installed.
2. Clone the project's repository using the `git clone https://github.com/dmpop/bilby.git` command. Alternatively, download the latest source code using the appropriate button on the project's page.
3. Open the _bilby/index.php_ file and change the default password.
4. Move the _bilby_ directory to the document root of your server.

Add the bookmarklet below to the **Bookmarks** toolbar of your browser. Replace _127.0.0.1/bilby_ with the actual IP address or domain name of the server running Bilby.

```javascript
javascript:var%20text=window.getSelection();location.href='https://127.0.0.1/bilby/index.php?url='+encodeURIComponent(location.href)
```

To add the URL of the currently viewed page, click on the bookmarklet.

## Problems?

Please report bugs and issues in the [Issues](https://github.com/dmpop/bilby/issues) section.

## Contribute

If you've found a bug or have a suggestion for improvement, open an issue in the [Issues](https://github.com/dmpop/bilby/issues) section.

To add a new feature or fix issues yourself, follow the following steps.

1. Fork the project's repository
2. Create a feature branch using the `git checkout -b new-feature` command
3. Add your new feature or fix bugs and run the `git commit -am 'Add a new feature'` command to commit changes
4. Push changes using the `git push origin new-feature` command
5. Submit a merge request

## Author

[Dmitri Popov](https://www.tokyomade.photography/)

# License

The [GNU General Public License version 3](http://www.gnu.org/licenses/gpl-3.0.en.html)
