const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
    entry: {
        global: './src/ts/global/eager-load/global.ts',
        page: './src/ts/page/eager-load/page.ts',
        single: './src/ts/single/eager-load/single.ts'
    },
    devtool: 'inline-source-map',
    module: {
        rules: [
            {
                test: /\.tsx?$/,
                use: 'ts-loader',
                exclude: /node_modules/,
            },
            {
                test: /\.s[ac]ss$/i,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader,
                        options: {
                            hmr: process.env.NODE_ENV === 'development',
                            // if hmr does not work, this is a forceful method.
                            reloadAll: true,
                        }
                    },
                    {
                        loader: 'css-loader',
                        options: {
                            sourceMap: true,
                        },
                    },
                    {
                        loader: 'sass-loader',
                        options: {
                            sourceMap: true,
                        },
                    },
                ],
            },
        ],
    },
    plugins: [
        new MiniCssExtractPlugin({
            // Options similar to the same options in webpackOptions.output
            // both options are optional
            filename: '[name].bundle.css',
            chunkFilename: '[name].bundle.css'
        }),
    ],
    resolve: {
        extensions: [ '.tsx', '.ts', '.js' ],
    },
    output: {
        publicPath: "/wp-content/themes/hamidev-theme-100/resources/dist/",
        filename: '[name].bundle.js',
        chunkFilename: '[name].bundle.js',
        path: path.resolve(__dirname, '../../public/wp-content/themes/hamidev-theme-100/resources/dist'),
    },
    stats: {
        colors: true
    }
};
