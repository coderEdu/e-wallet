<div class="flex flex-row items-center">
    <div class="flex text-slate-700">
        <input 
            type="text"
            id="tAmount"
            name="tAmount"
            data-type="currency"
            placeholder="$ 0,00"
            value="<?php echo (isset($_GET['tAmount']) ? $_GET['tAmount'] : ''); ?>"
            class="p-2 border-1 border-gray-400 rounded-md text-right"
            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, ',')"
        />        
    </div>        
</div>
