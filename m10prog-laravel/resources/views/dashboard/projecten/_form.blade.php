<label class="block">
                    <span class="text-gray-700">Titel</span>
                    <input type="text" name="titel" class="mt-1 block w-full" value="{{old('titel', $project->titel)}}">
                </label>
                <label class="block">
                    <span class="text-gray-700">kopje</span>
                    <input type="text" name="header" class="mt-1 block w-full" value="{{old('header', $project->header)}}">
                </label>
                <label class="block">
                    <span class="text-gray-700">Link</span>
                    <input type="text" name="link" class="mt-1 block w-full" value="{{old('link', $project->link)}}">
                </label>
                <label class="block">
                    <span class="text-gray-700">bescrijving</span>
                    <input type="text" name="description" value="{{old('description', $project->description)}}" class="mt-1 block w-full" >
                </label>
                <label class="block">
                    <span class="text-gray-700">foto url</span>
                    <input type="text" name="img" class="mt-1 block w-full" value="{{old('img', $project->img)}}">
                </label>
                <label class="block">
                    <span class="text-gray-700">video url</span>
                    <input type="text" name="video" class="mt-1 block w-full" value="{{old('video', $project->video)}}">
                </label>
                <label class="block">
                    <span class="text-gray-700">publiceren?</span>
                    <input type="checkbox" name="active" class="mt-1 block w-full" value="{{old('active')}}">
                </label>