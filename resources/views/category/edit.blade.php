<x-layouts.app>
  <section class="section">
  <div class="container">
      <div class="title is-2 form">Edit {{ $category->type }} information</div>
      <form action="{{ route('categories.update',$category) }}" method="POST"  enctype="multipart/form-data" >
        @csrf
        <input type="hidden" name="_method" value="PUT">
       <div class="field">
          <label class="label form"> Category Name</label>
          <div class="control">
            <input class="input @error('type')is-danger @enderror is-normal" name="type" type="text" value="{{ old('type',$category->type )}}" placeholder="Enter Category Type">
          </div>
          @error('type')
            <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="field">
          <label class="label">Restaurant</label>
          <div class="control" id="restaurant">
            <div class="select @error('restaurant_id')is-danger @enderror">
              <select name="restaurant_id" value="{{ old('restaurant_id') }}">
                @foreach ($restaurants as $restaurant)
                  <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          @error('restaurant_id')
            <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="field">
          <label class="label form"> Image</label>
          <div class="file">
            <label class="file-label">
              <input class="file-input" type="file" name="image" accept="image/*">
              <span class="file-cta">
                <span class="file-icon">
                  <i class="fas fa-upload"></i>
                </span>
                <span class="file-label">
                  Choose an image for category
                </span>
              </span>
            </label>
          </div>
          @error('image')
          <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="field is-grouped">
          <div class="control">
            <button class=" is-link form-button">Update</button>
          </div>
          <div class="control">
            <button class=" is-link is-light form-button">Cancel</button>
          </div>
        </div>
      </form>
  </div>


  </section>
  </x-layouts.app>
