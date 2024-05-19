<?php

namespace Modules\Tags\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Modules\Tags\Http\Requests\TagRequest;
use Modules\Tags\Models\Tag;

final class TagController extends Controller
{
    public function index(): Collection
    {
        return Tag::all();
    }

    public function show($id)
    {
        return Tag::findOrFail($id);
    }

    public function store(TagRequest $request)
    {
        return Tag::create($request->validated());
    }

    public function update(TagRequest $request, $id)
    {
        $tag = Tag::findOrFail($id);
        $tag->update($request->validated());
        return $tag;
    }

    public function destroy($id): JsonResponse
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return response()->json(['message' => 'Tag deleted successfully']);
    }
}
