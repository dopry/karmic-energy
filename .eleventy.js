const { DateTime } = require("luxon");
const CleanCSS = require("clean-css");
const UglifyJS = require("uglify-es");
const htmlmin = require("html-minifier");

module.exports = function(eleventyConfig) {
  eleventyConfig.addLayoutAlias("post", "layouts/post.njk");

  // Date formatting (human readable)
  eleventyConfig.addFilter("readableDate", dateObj => {
    return DateTime.fromJSDate(dateObj).toFormat("dd LLL yyyy");
  });

  // Date formatting (machine readable)
  eleventyConfig.addFilter("machineDate", dateObj => {
    return DateTime.fromJSDate(dateObj).toFormat("yyyy-MM-dd");
  });

  // Minify CSS
  eleventyConfig.addFilter("cssmin", function(code) {
    return new CleanCSS({}).minify(code).styles;
  });

  // Minify JS
  eleventyConfig.addFilter("jsmin", function(code) {
    let minified = UglifyJS.minify(code);
    if (minified.error) {
      console.log("UglifyJS error: ", minified.error);
      return code;
    }
    return minified.code;
  });

  // Minify HTML output
  eleventyConfig.addTransform("htmlmin", function(content, outputPath) {
    if (outputPath.indexOf(".html") > -1) {
      let minified = htmlmin.minify(content, {
        useShortDoctype: true,
        removeComments: true,
        collapseWhitespace: true
      });
      return minified;
    }
    return content;
  });

  // only content in the `posts/` directory
  eleventyConfig.addCollection("posts", function(collection) {
    return collection.getAllSorted().filter(function(item) {
      return item.inputPath.match(/^\.\/posts\//) !== null;
    });
  });

  // Don't process folders with static assets e.g. images

  eleventyConfig.addPassthroughCopy("admin");
  eleventyConfig.addPassthroughCopy("assets/css");
  eleventyConfig.addPassthroughCopy("assets/css/vendors");
  eleventyConfig.addPassthroughCopy("assets/css/vendors/bootstrap");
  eleventyConfig.addPassthroughCopy("assets/demo");
  eleventyConfig.addPassthroughCopy("assets/demo/home");
  eleventyConfig.addPassthroughCopy("assets/img");
  eleventyConfig.addPassthroughCopy("assets/img/KarmicEnergy");
  eleventyConfig.addPassthroughCopy("assets/js");
  eleventyConfig.addPassthroughCopy("assets/vendors");
  eleventyConfig.addPassthroughCopy("assets/vendors/slick-slider");
  eleventyConfig.addPassthroughCopy("assets/vendors/aos");
  eleventyConfig.addPassthroughCopy("assets/vendors/feather-icons");
  eleventyConfig.addPassthroughCopy("assets/vendors/feather-icons/fonts");
  eleventyConfig.addPassthroughCopy("assets/vendors/stickybits");
  eleventyConfig.addPassthroughCopy("assets/vendors/js-cookie");
  eleventyConfig.addPassthroughCopy("assets/vendors/lodash");
  eleventyConfig.addPassthroughCopy("assets/vendors/magnific-popup");
  eleventyConfig.addPassthroughCopy("assets/vendors/animejs");
  eleventyConfig.addPassthroughCopy("assets/vendors/bootstrap/js");
  eleventyConfig.addPassthroughCopy("assets/vendors/slick-slider");
  eleventyConfig.addPassthroughCopy("assets/vendors/unifato-icons");
  eleventyConfig.addPassthroughCopy("assets/vendors/unifato-icons/fonts");


  /* Markdown Plugins */
  let markdownIt = require("markdown-it");
  let markdownItAnchor = require("markdown-it-anchor");
  let options = {
    html: true,
    breaks: true,
    linkify: true
  };
  let opts = {
    permalink: false
  };

  eleventyConfig.setLibrary("md", markdownIt(options)
    .use(markdownItAnchor, opts)
  );

  return {
    templateFormats: ["md", "njk", "html", "liquid"],

    // If your site lives in a different subdirectory, change this.
    // Leading or trailing slashes are all normalized away, so don’t worry about it.
    // If you don’t have a subdirectory, use "" or "/" (they do the same thing)
    // This is only used for URLs (it does not affect your file structure)
    pathPrefix: "/",

    markdownTemplateEngine: "liquid",
    htmlTemplateEngine: "njk",
    dataTemplateEngine: "njk",
    passthroughFileCopy: true,
    dir: {
      input: ".",
      includes: "_includes",
      data: "_data",
      output: "_site"
    }
  };
};
