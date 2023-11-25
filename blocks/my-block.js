
const { registerBlockType } = wp.blocks;

registerBlockType('mytheme/my-block', {
    title: 'My Custom Block',
    icon: 'smiley',
    category: 'common',
    edit: function() {
        return <p>Hello, this is my custom block!</p>;
    },
    save: function() {
        return <p>Hello, this is my custom block!</p>;
    },
});
