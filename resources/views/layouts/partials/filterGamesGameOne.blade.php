<div>
    <form class="row m-auto container-xl bg-secondary w-100 px-0" action="{{ route('home.viewGame', $gameOne) }}"
        method="GET">
        @method('GET')
        @csrf
        <div class="col-4 py-4 px-4 border border-5 overflow-auto">
            <label for="platform_id" class="form-label">Plataforma:</label>
            <select name="filter[platform_id]" id="platform_id" class="form-control">
                <option value="0" {{ $requestData['platform_id'] == 0 ? 'selected' : '' }}>Selecciona una plataforma
                </option>
                @foreach ($platforms as $platform)
                    <option value="{{ $platform->id }}"
                        {{ $requestData['platform_id'] == $platform->id ? 'selected' : '' }}>
                        {{ $platform->platform }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-8 game_info d-flex border border-5 p-4">
            <div class="col-4 px-2">
                <label for="location_id" class="form-label pe-2">País:</label>
                <br>
                <select name="filter[location_id]" id="location_id" class="form-control">
                    <option value="0" {{ $requestData['location_id'] == 0 ? 'selected' : '' }}>Selecciona una
                        localización</option>
                    @foreach ($locations as $location)
                        <option value="{{ $location->id }}"
                            {{ $requestData['location_id'] == $location->id ? 'selected' : '' }}>
                            {{ $location->location }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-4">
                <label for="language_id" class="form-label">Idioma:</label>
                <br>
                <select name="filter[language_id]" id="language_id" class="form-control">
                    <option value="0" {{ $requestData['language_id'] == 0 ? 'selected' : '' }}>Selecciona un idioma
                    </option>
                    @foreach ($languages as $language)
                        <option value="{{ $language->id }}"
                            {{ $requestData['language_id'] == $language->id ? 'selected' : '' }}>
                            {{ $language->language }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-4 px-2">
                <label for="romsize_id" class="form-label">Tamaño:</label>
                <br>
                <div class="col-4 px-2">
                    <select name="filter[romsize_id]" id="romsize_id" class="form-control">
                        <option value="0" {{ $requestData['romsize_id'] == 0 ? 'selected' : '' }}>Selecciona una
                            romsize
                        </option>
                        @foreach ($romsizes as $romsize)
                            <option value="{{ $romsize->id }}"
                                {{ $requestData['romsize_id'] == $romsize->id ? 'selected' : '' }}>
                                {{ $romsize->romsize }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12 d-flex border border-5 justify-content-center">
                <button name="submit" type="submit" class="btn btn-primary">Filtrar</button>
            </div>
    </form>
</div>
