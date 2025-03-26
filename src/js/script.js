import { header_button_move } from "./controller/header_button_move.js";
import { scroll_header } from "./controller/scroll_header.js";

document.addEventListener('DOMContentLoaded', () => {
    header_button_move();
    scroll_header();
})