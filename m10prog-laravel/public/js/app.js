const menu = Vue.createApp({
    data() {
        return {
            menu: false,
            search: false
        }
    }, methods: {
        //menu
        togglemenu() {
            this.menu = !this.menu;
        },
        togglemenuSmall() {
            this.menu = !this.menu;
            this.search = this.search = false;
        },
        //search
        togglesearch() {
            this.search = !this.search;
        },
        togglesearchSmall() {
            this.search = !this.search;
            this.menu = this.menu = false;
        }
    }
});
menu.mount('#nav_right')

