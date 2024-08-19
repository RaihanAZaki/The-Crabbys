import './bootstrap';
import 'flowbite';
import 'preline';

document.addEventListener('livewire:navigated', () => {
    window.HSStaticMethods.autoInit()
})