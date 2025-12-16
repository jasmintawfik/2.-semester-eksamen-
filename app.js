// Importerer funktionen emojiCursor fra et eksternt JavaScript-modul (ES module)
// Modulet hentes fra unpkg, som er et CDN
import { emojiCursor } from "https://unpkg.com/cursor-effects@latest/dist/esm.js";

// Lytter efter når hele siden er færdigindlæst
window.addEventListener('load', () => {

    // Aktiverer emoji-cursor effekten
    emojiCursor({
        emoji: ["❄️"],        // Bestemmer hvilken emoji der vises ved cursoren
        particleCount: 20,   // Antal emojis der genereres ad gangen
    });

});
