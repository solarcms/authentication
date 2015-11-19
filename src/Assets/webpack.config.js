/**
 * Created by n0m4dz on 10/20/15.
 */

var path = require('path');
var webpack = require('webpack');
var ExtractTextPlugin = require('extract-text-webpack-plugin');
var CopyPlugin = require('copy-webpack-plugin');

var node_modules_dir = path.resolve(__dirname, 'node_modules');
var __PROD__ = JSON.parse(process.env.PROD_DEV || '0');

module.exports = {
    entry: {
        bundle: path.resolve(__dirname, 'src/scripts/app')
    },
    output: {
        path: path.join(__dirname, 'dist/'),
        filename: 'js/[name].js',
        publicPath: path.join(__dirname, 'dist/')
    },
    module: {
        loaders: [
            //SCRIPTS
            {
                test: /\.js$/,
                exclude: node_modules_dir,
                loaders: ['babel'],
                include: path.join(__dirname, 'src/scripts')
            },

            //SCSS
            {
                test: /\.scss$/,
                loader: ExtractTextPlugin.extract('css!sass')
            },

            // FONTS & IMAGES
            {
                test: /\.woff($|\?)|\.woff2($|\?)|\.ttf($|\?)|\.eot($|\?)|\.png($|\?)|\.jpg($|\?)|\.gif($|\?)|\.bmp($|\?)|\.svg($|\?)/,
                loader: 'url-loader'
            },

            //HTML
            {
                test: /\.html/,
                loader: 'file?name=[name].[ext]'
            }
        ]
    },
    sassLoader: {
        includePaths: [path.resolve(__dirname, './src/scss')]
    },
    plugins: [
        new webpack.HotModuleReplacementPlugin(),
        new webpack.NoErrorsPlugin(),

        //Chunk css
        new ExtractTextPlugin('css/[name].css', {
            allChunks: true
        }),

        //Aliasing library
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery'
        }),

        //Copy assets
        new CopyPlugin([
            // File
            {from: './src/views/index.html', to: 'index.html', toType: 'file'},

            // Directory
            {from: './src/images', to: 'images', toType: 'dir'}
        ])
    ]
};
