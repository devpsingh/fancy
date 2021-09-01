<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    @livewire('admin.sidebar')
    <div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Add product
                                    <small>Fancyfab As Unique As You</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Add product</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
    <div class="container" style="margin-left:30%">
           
        <div class="panel-body">
            <div class="col-md-8 p-3">
                <div>
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <form wire:submit.prevent="submit" enctype="multipart/form-data">
               <div class="row">
                <div class="form-group col-md-6">
                    <label for="product_name">Enter product name</label>
                    <input type="text" wire:model="product_name" name="product_name" class="form-control" id="pname" aria-describedby="emailHelp" placeholder="Enter Product name">
                    @error('product_name') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
                <div class="form-group col-md-6">
                    <label for="product_category">Select category</label>
                    <select wire:model="product_category" class="form-control" name="product_category" id="product_category">
                    <option value="">Select collection category</option>
                    <option value="bridal">Bridal</option>
                    <option value="antique">Antique</option>
                    <option value="clearance">Cleareance</option>
                        @if(!empty($category))
                            @foreach($category as $cat)
                            <option value="{{ $cat->id }}">{{$cat->category}}</option>
                            @endforeach
                        @endif
                    </select>
                    @error('product_category') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4" id="dis"  >
                        <label for="clearance_discount">Clearance discount</label>
                        <input type="number" placeholder="Clearance discount" wire:model="discount" class="form-control" id="clearance_discount" />
                    </div>
                    @error('discount') <span class="text-danger">{{ $message }}</span> @enderror
                <div class="form-group col-md-8">
                    <label for="shopall_category">Select shop all category</label>
                    <select wire:model="shopall_category" class="form-control" name="shopall_category" id="shopall_category">
                    <option value="">Select shop all category</option>
                    
                        @if(!empty($shopall))
                            @foreach($shopall as $cat)
                            <option value="{{ $cat->id }}">{{$cat->categoryshopall}}</option>
                            @endforeach
                        @endif
                    </select>
                    @error('shopall_category') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                </div>
                @if($colors)
                <div class="row">
                <div class="col-md-12 d-flex">
                     @foreach($colors as $color)
                        <div class="px-2" style="background-color:#{{$color->colorcode}}">
                        <input type="checkbox" value="{{$color->id}}" id="{{$color->id}}" wire:model="coloroptions" />
                        <label for="{{$color->id}}"> {{$color->colorname}}</label>
                        </div>
                        @endforeach
                    
                    </div>
                    @endif
                    @error('coloroptions') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="description">Enter produt description</label>
                    <textarea name="description" class="form-control" id="description" wire:model="description"></textarea>
                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
                <div class="row">
                <div class="form-group col-md-6">
                    <label for="code">Enter produt code</label>
                    <input name="code" wire:model="code" type="text" class="form-control" id="code" placeholder="Enter code">
                    @error('code') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
                <div class="form-group col-md-6">
                    <label for="quantity">Enter produt Quantity</label>
                    <input name="quantity" wire:model="quantity" type="number" class="form-control" id="quantity" placeholder="Enter quantity">
                    @error('quantity') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
                </div>
                <div class="row">
                <div class="form-group col-md-6">
                    <label for="price">Enter produt price to sale</label>
                    <input name="price" wire:model="price" type="number" class="form-control" id="product-price" placeholder="Enter selling price">
                    @error('price') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
                <div class="form-group col-md-6">
                    <label for="availability">Select availability status</label>
                    <select name="availabilitiy" wire:model="availability" class="form-control" id="availability">
                    <option value="" >Select availabilitiy options</option>
                    <option value="1">Available</option>
                    <option value="0">Un available</option>
                    </select>
                    @error('availability') <span class="text-danger error">{{ $message }}</span> @enderror
                </div>
                </div>
                <div class="form-group">
                    <label for="productimage">choose images to upload, Each image size must not be above 2 MB</label>
                    <input type="file" wire:model="photos" name="images" class="form-control-file" id="productimage" multiple>
                    @error('photos.*') <span class="text-danger error">{{ $message }}</span>@enderror
                    <div wire:loading wire:target="photos" id="loader-div" class="text-sm text-gray-500 italic">
                    <!-- <img src="{{asset('/storage/icons/loader.gif')}}" id="loader" /> -->Loading please wait...
                    </div>
               
                </div>
                
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
   
</div>
