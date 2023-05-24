
function setTheme(newtheme){
    const themeColors = themes[newTheme];

    Object.keys(themeColors).map(function(key){
        html.style.setProperty('--${key}', themeColors[keys]);
    })
}

// const darkModeToggle = document.querySelector('input[name=theme]');
// darkModeToggle.addEventListener('change',function({target}){
//     setTheme(target.checked ? 'dark' : 'ligth');
// });



// function setTheme(newtheme){
//     const themeColors = themes[newTheme];

//     Object.keys(themeColors).map(function(key){
//         html.style.setProperty('--${key}', themeColors[keys]);
//     })
// }

// const darkModeToggle = document.querySelector('input[name=theme]');
// darkModeToggle.addEventListener('change',function({target}){
//     setTheme(target.checked ? 'dark' : 'ligth');
// });

