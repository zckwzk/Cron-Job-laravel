 <section
     class="section-light no-padding-top regular-section has-text-centered has-vertically-aligned-content is-fullheight"
     id="ucapan">

     <h2 class="has-text-centered has-vertically-aligned-content">Wanna Congratulate Us, Write here</h2>


     <span class="space40px"></span>
     <span class="space40px"></span>

     <div class="textarea-container has-text-centered has-vertically-aligned-content">
         <input class="input" type="text" placeholder="Name" wire:model="name">
         <textarea class="textarea " placeholder="Pesan" rows="5" wire:model="pesan" name="pesan"></textarea>
         @error('pesan') <span class="error">{{ $message }}</span> @enderror
     </div>

     <button class="button is-primary" wire:loading.class="is-loading" id="post" wire:click="addUcapan">Post</button>
     <span class="space40px"></span>

     <span class="space40px"></span>
     <span class="space40px"></span>

     @foreach ($ucapans as $ucapan)

         <div class="columns is-centered" wire:key="$loop->index()">
             {{-- <div class="column"></div> --}}
             <div class="column is-half" style="margin-top: 10px">
                 <div class="box">
                     <!--.box disini berfungsi untuk membungkus elemen-elemen lainnya dan-->
                     <article class="media">
                         <div class="media-left">
                             {{-- <figure class="image is-64x64">
                                 <img src="http://bulma.io/images/placeholders/128x128.png" alt="Image">
                             </figure> --}}
                             <div
                                 style="background-color: {{ $loop->index % 2 == 0 ? 'lightgoldenrodyellow' : 'lightblue' }} ; padding: 20px; border-radius:10px">
                                 <h2>{{ ucfirst($ucapan->name)[0] }}</h2>
                             </div>
                         </div>

                         <div class="media-content">
                             <div class="content">
                                 <p style="text-align: left">
                                     <strong>{{ $ucapan->name }}</strong>
                                     <small>{{ $ucapan->created_at->diffForHumans() }}</small>
                                     <br>
                                     {{ $ucapan->ucapan }}
                                 </p>
                             </div>
                         </div>
                     </article>
                 </div>
             </div>
             {{-- <div class="column"></div> --}}
         </div>

     @endforeach

     @if ($hasMore == true)
         <button class="button is-primary" wire:loading.class="is-loading" wire:click="loadMore()">Load
             More</button>
     @endif
     {{-- @if ($hasMore)
         @livewire('add-ucapan', ['page' => $currentPage + 1])
     @else
         <button wire:click="loadMore()" class="btn btn-dark btn-lg shadow-sm">Load More</button>`
     @endif --}}

 </section>
 <!-- End regular-section-->
