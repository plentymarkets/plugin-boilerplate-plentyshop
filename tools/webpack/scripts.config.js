/**
 * This is a sample production-ready build configuration for building your bundles.
 */

const path = require("path");
const VueLoaderPlugin = require("vue-loader/lib/plugin");

module.exports = env =>
{
    env = env || {};
    return {
        name: "scripts", // Build script identifier for webpack
        mode: env.prod ? "production" : "development", // Production or development mode
        entry: "./resources/js/src/client.js", // Entry point
        output: {
            filename: "plentyshop-client" + (env.prod ? ".min" : "") + ".js",
            chunkFilename: "chunks/plentyshop-client-[name]"+ (env.prod ? ".min" : "") + ".js",
            path: path.resolve(__dirname, "..", "..", "resources/js/dist/")
        },
        devtool: "source-map",
        module: {
            rules: [
                {   // Vue loader is used to parse and compile the SFC files
                    test: /\.vue$/,
                    loader: "vue-loader"
                },
                {   // Babel transpiles the code so older browsers can understand the code
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
            })
        ]
    };
};
