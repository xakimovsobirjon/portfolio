<div>
    <div class="input-box">
        <div class="fluid"><input wire:model="name" type="text" placeholder="Name">
            <x-input-error :messages="$errors->get('name')" style="color: #FF0000"/>
        </div>
        <div class="fluid"><input wire:model="email" type="email" placeholder="Email">
            <x-input-error :messages="$errors->get('email')" style="color: #FF0000"/>
        </div>
        <div class="fluid"><input wire:model="phone" type="tel" placeholder="Phone">
            <x-input-error :messages="$errors->get('phone')" style="color: #FF0000"/>
        </div>
        <div class="fluid"><input wire:model="subject" type="text" placeholder="Subject">
            <x-input-error :messages="$errors->get('subject')" style="color: #FF0000"/>
        </div>
    </div>
    <div class="comment-box-with-button">
        <div class="fluid">
            <textarea wire:model="comment" name="comment" id="comment" cols="30" rows="10" placeholder="message"></textarea>
            <x-input-error :messages="$errors->get('comment')" style="color: #FF0000"/>
            <button wire:click="send" id="sending">{{ $success }}</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        window.addEventListener('send_success', event => {
            Swal.fire({
                title: "Your message has been sent successfully.",
                text: "Thank you for reaching out to us!",
                icon: "success"
            });
        })



    </script>
</div>
