# Front-End Project Architecture

We are going to using **Vue.js** for this project

And this is our code structure

- **`bootstrap.js`**: Pre-define from Laravel (If no need, **DO NOT delete or modified it**)
- **`app.js`**: Entry file for our apps which contains
  - Apps Route (using **VueRouter**)
  - Root App Component (as `<app></app>`)
- **components**: Containing **only components**
- **pages**: Containing **only page** which will be included by Apps Route inside app.js (so these mean 1 page will make up with many components like `Landing.page.vue`)
