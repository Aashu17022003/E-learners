function checkButton() {
    let courseName = document.getElementById('course_name').value;
    let details = document.getElementById('details').value;
    let pic_url = document.getElementById('pic_url').value;
    let lang_doc = document.getElementById('lang_doc').value;
    let addcourse = document.getElementById('addcourse');

    if ((courseName === "") || (details === "") || (pic_url === "") || (lang_doc === "")) {
        addcourse.disabled = true;
    } else {
        addcourse.disabled = false;
    }
}