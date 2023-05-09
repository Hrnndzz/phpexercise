let str = "KENNETH HERNANDEZ";

function countVWL(str) {
    let counter = 0;
    for (let i = 0; i < str.length; i++) {
        if (str[i] === 'A' || str[i] === 'a' || str[i] === 'E' || str[i] === 'e' || str[i] === "I" || str[i] === "i" || str[i] === "O" || str[i] === "o" || str[i] === "U" || str[i] === "u") {
            counter++;
        }
    }
    return counter;
}
function countVowels2(str) {
    const vowels = /[aeiou]/gi;
    const matches = str.match(vowels);
    console.log(matches);
    return matches ? matches.length : 0;
}

console.log(countVWL(str));
console.log(countVowels2(str));

function count(str) {
    const find = /[kenneth]/gi;
    const answer = str.match(find);
    console.log(answer);
}

count(str);