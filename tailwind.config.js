module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require("flowbite/plugin"), 
        require("tailgrids/plugin"),
    ],
    // plugins: [require("tailgrids/plugin")],
};
