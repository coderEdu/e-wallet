<div
      class="modal"
      role="dialog"
      tabindex="-1"
      x-show="isModalOpen"      
      x-on:click.away="isModalOpen = false"
      x-cloak
      x-transition
>
    <div class="model-inner">
        <div class="modal-header">
            <h3>Nuevo depósito</h3>
            <button aria-label="Close" x-on:click="isModalOpen = false">✖</button>
        </div>
        <p>
            Natus earum velit ab nobis eos. Sed et exercitationem voluptatum omnis
            dolor voluptates. Velit ut ipsam sunt ipsam nostrum. Maiores officia
            accusamus qui sapiente. Dolor qui vel placeat dolor nesciunt quo dolor
            dolores. Quo accusamus hic atque nisi minima.
        </p>
    </div>
</div>
<div class="overlay" x-show="isModalOpen" x-cloak></div>