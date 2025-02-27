document.getElementById("content_desc").addEventListener("input", function () {
    let text = this.value.trim();
    let words = text.match(/\b\w+\b/g) || []; // Match words properly
    let wordCount = words.length;
    
    let message = document.getElementById("word_count_msg");

    if (wordCount > 30) {
        message.textContent = "Content must not exceed 30 words!";
        this.value = words.slice(0, 30).join(" "); // Trims excess words
    } else {
        message.textContent = "";
    }
});

