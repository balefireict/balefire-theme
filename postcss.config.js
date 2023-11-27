module.exports = {
    plugins: [
        require('postcss-import'),
        require('autoprefixer'),
        require('cssnano')({
            preset: 'default',
        }),
    ],
    map: false, // Disable source maps
};