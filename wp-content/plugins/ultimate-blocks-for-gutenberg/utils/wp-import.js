/*
 * It's better for manage to all Imports from one Location
 * Gutenberg is continously changing. It's more Managable
 */
export const { registerBlockType } = wp.blocks

export const { __, sprintf, setLocaleData } = wp.i18n

export const { compose, withState } = wp.compose;

export const { withSelect } = wp.data;

export const {
    RangeControl,
    SelectControl,
    TextareaControl,
    TextControl,
    ToggleControl,
    Dashicon,
    withFallbackStyles,
    IconButton,
    Button,
    Tooltip,
    PanelBody,
    PanelRow,
    RadioControl,
    Toolbar,
    FormToggle,
    withNotices,
    withAPIData,
    Spinner,
    Placeholder,
    G,
    Path,
    SVG


} = wp.components

export const {
    InspectorControls,
    BlockControls,
    ColorPalette,
    AlignmentToolbar,
    RichText,
    URLInput,
    MediaUpload,
    MediaPlaceholder,
    withColors,
    getColorClassName,
    MediaUploadCheck,
    URLInputButton,
    ContrastChecker,
    getPhrasingContentSchema

} = wp.editor.InspectorControls ? wp.editor : wp.blocks

export const {
    InnerBlocks,
    PanelColorSettings,
    BlockAlignmentToolbar,
    withFontSizes
} = wp.editor

export const {
    Fragment,
    Component
} = wp.element

export const {
    omit,
    merge,
    isUndefined,
    pickBy

} = lodash

export const {
    doAction,
    addAction,
    applyFilters,
    addFilter,
} = wp.hooks


export const {
    createBlobURL,
    isBlobURL
} = wp.blob

export const {
    BACKSPACE, 
    DELETE
} = wp.keycodes


// export const isPro = egb.isPro