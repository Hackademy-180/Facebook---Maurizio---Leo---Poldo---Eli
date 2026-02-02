<!-- From Uiverse.io by catraco --> 
<form  method="POST" action="{{route("preferitePost",compact("post"))}}">
    @csrf
    <button class="button-preferite" type="submit">
        <i class="fa-regular fa-heart" >
        </i>
    </button>
    </form>