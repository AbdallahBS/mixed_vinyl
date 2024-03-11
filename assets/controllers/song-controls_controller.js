// Create a global variable to store the current playing audio
let currentAudio = null;

import { Controller } from '@hotwired/stimulus';
import axios from 'axios';

export default class extends Controller {
    static values = {
        infoUrl: String,
    };

    play(event) {
        event.preventDefault();
        if (currentAudio) {
            currentAudio.pause();
            currentAudio.currentTime = 0;
        }
        axios.get(this.infoUrlValue)
            .then(response => {
                const audio = new Audio(response.data.url);
                currentAudio = audio; 
                audio.play();
            })
            .catch(error => {
                console.error('Error loading audio:', error);
            });
    }
}
