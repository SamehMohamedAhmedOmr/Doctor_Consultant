function truncateText(selector, maxLength) {
        truncated = selector.innerText;

    if (truncated.length > maxLength) {
        truncated = truncated.substr(0,maxLength) + '...';
    }
    return truncated;
}
//You can then call the function with something like what i have below.
var paragraphs = document.getElementsByTagName('p');
for (var i = 0; i < paragraphs.length; i++) {
	paragraphs[i].textContent = truncateText(paragraphs[i],107);
}