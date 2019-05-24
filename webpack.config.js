const autoprefixer = require('autoprefixer');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const CompressionPlugin = require('compression-webpack-plugin');
const CopyPlugin = require('copy-webpack-plugin');
const EnvironmentPlugin = require('webpack').EnvironmentPlugin;
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const ProvidePlugin = require('webpack').ProvidePlugin;
const path = require('path');
const precss = require('precss');
const postcssPlugins = function() { return [ precss, autoprefixer ]; };
const TerserPlugin = require('terser-webpack-plugin');

/**
 * For KarmicEnergy webpack is solely used to bundle assets for the site.
 * Output is written into src/site/... where eleventy will pick up the changes
 * and re-render the site.
 */


module.exports = {
    context: path.join(__dirname, 'src/'),
    entry: {
        'scripts': './js/scripts.js',
    },
    mode: 'production',
    output: {
        path: path.join(__dirname, 'src', 'site', 'assets', 'js'),
        publicPath: '/',
        filename: '[name].js',
    },
    optimization: {
        minimizer: [
          new TerserPlugin({
            cache: true,
            parallel: true,
            sourceMap: true // set to true if you want JS source maps
          }),
          new OptimizeCSSAssetsPlugin({})
        ]
    },
    devtool: 'source-map',
    module: {
        rules: [
            { test: /\.(ts|js)$/, use: 'ts-loader', exclude: /node_modules/ },
            { test: /\.(scss|sass)$/, use: [
                { loader: MiniCssExtractPlugin.loader },
                { loader: 'css-loader'},
                { loader: 'postcss-loader', options: { plugins: postcssPlugins }},
                { loader: 'sass-loader', options: { includePaths: [ path.resolve(__dirname, './node_modules/compass-mixins/lib') ], sourceMaps: true, sourceMapContent: false} }
            ]},
            { test: /\.css$/, use: [
                { loader: MiniCssExtractPlugin.loader },
                { loader: 'css-loader'},
                { loader: 'postcss-loader', options: { plugins: postcssPlugins }},
            ]},
            // Convert images < 8kb to base64 strings
            { test: /\.(png|jp(e*)g|svg)$/, loader: 'url-loader', options: { limit: 8000, name: '[path][name].[ext]?[hash]' } },
            { test: /\.(json)/, type: 'javascript/auto', loader: 'url-loader', options: { limit: 8000, name: '[path][name].[ext]?[hash]' }},
            { test: /\.html$/, loader: 'html-loader' },
            { test: /\.(woff|woff2|eot|ttf|otf)$/, loader: 'file-loader', options: {  name: '[path][name].[ext]?[hash]' }}
        ]
    },
    resolve: {
        // allow imports without file extension
        extensions: [ '.ts', '.js' ]
    },
    plugins: [
        new CleanWebpackPlugin(),
        new EnvironmentPlugin({}),
        new ProvidePlugin({}),
        new CompressionPlugin({
          test: /\.(json|js|css|html)$/i,
          exclude: /(node_modules)/,
        }),
        new MiniCssExtractPlugin({
          // Options similar to the same options in webpackOptions.output
          // both options are optional
          filename: "styles.css",
          path: path.join(__dirname, 'src', 'site', 'assets', 'css'),
          chunkFilename: "[id].css"
        }),
        new CopyPlugin([])
    ],
}