const path = require("path");
const VueLoaderPlugin = require("vue-loader/lib/plugin");
const TerserPlugin = require('terser-webpack-plugin');
const WebpackRequireFrom = require("webpack-require-from");
const webpack = require("webpack");

module.exports = env =>
{
    env = env || {};
    return {
        name: "scripts-server",
        mode: env.prod ? "production" : "development", // Production or development mode
        entry: "./resources/js/src/server.js",
        target: "node",
        output: {
            filename: "plentyshop-boilerplate-server" + (env.prod ? ".min" : "") + ".js",
            path: path.resolve(__dirname, "..", "..", "resources/js/dist/"),
            libraryTarget: "commonjs2"
        },
        devtool: "source-map",
        module: {
            rules: [
                {
                    test: /\.vue$/,
                    loader: "vue-loader"
                },
                {
                    test: /\.m?js$/,
                    exclude: /node_modules/,
                    use: {
                        loader: "babel-loader"
                    }
                }
            ]
        },
        plugins: [
            new VueLoaderPlugin({
                exposeFilename: true
            }),
            new WebpackRequireFrom({
                replaceSrcMethodName: "__loadPluginChunk"
            }),
            new webpack.optimize.LimitChunkCountPlugin({
                maxChunks: 1
            })
        ],
        optimization: {
            chunkIds: "natural",
            minimizer: [
                new TerserPlugin({
                    extractComments: false,
                }),
            ],
        }
    };
};
