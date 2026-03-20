<x-layout>

        <div class="content-wrapper">
            <div class="container-full">
                <!-- Main content -->
                <section class="content text-center dsh-cnt-section " style="height:90vh; display:flex; align-items:center;justify-content:center;">
                    <div>
                        <div class="logo-scene">
                            <div class="logo-wrap">
                                <img src="{{asset('website/human/dghrd-logo.webp') }}" class="logo-animate" />
                            </div>
                        </div>
                        
                        <h1 id="typing-text" class="typing">
                          Directorate General of Human Resource Development
                        </h1>
                  
                    </div>
                </section>
                <!-- /.content -->
            </div>
        </div>
        
<script>
const el = document.getElementById("typing-text");
const fullText = el.innerText;
el.innerText = "";

const typingSpeed = 150;
const deletingSpeed = 150;
const startDelay = 1500;   // before first typing
const endDelay = 2000;     // after typing before deleting
const restartDelay = 3000;

let index = 0;
let isDeleting = false;

function typeLoop() {
    if (!isDeleting) {
        // Typing
        if (index < fullText.length) {
            el.innerText += fullText.charAt(index);
            index++;
            setTimeout(typeLoop, typingSpeed);
        } else {
            setTimeout(() => isDeleting = true, endDelay);
            setTimeout(typeLoop, endDelay);
        }
    } else {
        // Deleting
        if (index > 0) {
            el.innerText = fullText.substring(0, index - 1);
            index--;
            setTimeout(typeLoop, deletingSpeed);
        } else {
            isDeleting = false;
            setTimeout(typeLoop, restartDelay);
        }
    }
}

// Start with delay (sync with logo)
setTimeout(typeLoop, startDelay);
</script>

</x-layout>



