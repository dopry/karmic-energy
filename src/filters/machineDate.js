module.exports = (dateObj) => {
    return DateTime.fromJSDate(dateObj).toFormat("yyyy-MM-dd");
}