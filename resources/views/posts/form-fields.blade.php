
<div class="space-y-4">
    <label class="flex flex-col">
        <span class="font-cambria text-slate-600 dark:text-slate-400">Nombre</span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="nombre" type="text" value="{{ old('nombre', $post->nombre) }}">
        @error('nombre')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
    </label>
    <label class="flex flex-col">
        <span class="font-cambria text-slate-600 dark:text-slate-400">Color</span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="color" type="text" value="{{ old('color', $post->color) }}">
        @error('color')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
    </label>
    
    <label class="flex flex-col">
        <span class="font-cambria text-slate-600 dark:text-slate-400">Tipo</span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="tipo" type="text" value="{{ old('tipo', $post->tipo) }}">
        @error('tipo')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
    </label>
    <label class="flex flex-col">
        <span class="font-cambria text-slate-600 dark:text-slate-400">Talla</span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="talla" type="text" value="{{ old('talla', $post->talla) }}">
        @error('talla')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
    </label>
    <label class="flex flex-col">
        <span class="font-cambria text-slate-600 dark:text-slate-400">Cantidad</span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="cantidad" type="text" value="{{ old('cantidad', $post->cantidad) }}">
        @error('cantidad')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
    </label>
   
     <label class="flex flex-col">
        <span class="font-cambria text-slate-600 dark:text-slate-400">Imagen</span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="img" type="file" value="{{old('img', $post->img) }}">
        @error('img')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
    </label> 
    
</div>
