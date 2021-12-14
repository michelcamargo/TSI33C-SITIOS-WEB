const mix = require('laravel-mix');

var fs = require('fs');
var path = require('path');

mix.js('resources/js/app.js', 'public/js');
// mix.sass('resources/sass/main.scss', 'public/css');

var stylesRootDirectory = './resources/sass/';
var stylesRootOutput = 'public/css/';
var sassFiles = fs.readdirSync(stylesRootDirectory);

compileStyles(sassFiles, stylesRootOutput, stylesRootDirectory);

function compileStyles (files, outputPath, styleDir) {
    for (var file of files) {
        if (path.extname(file) === '.scss') {
            mix.sass(`${styleDir}${file}`, outputPath);
        }

        else {
            var stat = fs.lstatSync(`${stylesRootDirectory}${file}`);
            if(stat.isDirectory()) {
                var innerDir = fs.readdirSync(`./resources/sass/${file}`);
                var innerOutputDir = `${outputPath}${file}`;

                compileStyles(innerDir, innerOutputDir, `./resources/sass/${file}/`);
            }
        }
    }
}

