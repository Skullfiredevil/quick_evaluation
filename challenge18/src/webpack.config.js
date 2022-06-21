const {VueLoaderPlugin} = require('vue-loader')
let path = require('path')

module.exports = {
    mode: 'development',
    entry: {
        main: './res/main.js'
    },
    output: {
        path: path.resolve(__dirname, './dist'),
        filename: '[name].js?[contenthash]'
    },
    module: {
        rules: [
            {
                test: /\.css$/,
                use: ['vue-style-loader', 'style-loader', 'css-loader']
            },
            {
                test: /\.vue$/,
                loader: 'vue-loader'
            }
        ]
    },
    plugins: [
        new VueLoaderPlugin()
    ]
}