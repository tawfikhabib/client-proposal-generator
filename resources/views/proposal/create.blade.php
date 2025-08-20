<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Proposal Generator</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
  <div class="bg-white shadow-xl rounded-lg p-8 w-full max-w-2xl">
    <h1 class="text-3xl font-bold mb-6 text-gray-800 flex items-center gap-2">
      📝 <span>Client Proposal Generator</span>
    </h1>

    <form method="POST" action="{{ route('proposal.generate') }}" class="space-y-6">
      @csrf

      <div>
        <label class="block text-sm font-semibold text-gray-700">Client Name</label>
        <input type="text" name="client_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" required>
      </div>

      <div>
        <label class="block text-sm font-semibold text-gray-700">Project Title</label>
        <input type="text" name="project_title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" required>
      </div>

      <div>
        <label class="block text-sm font-semibold text-gray-700">Scope</label>
        <textarea name="scope" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" required></textarea>
      </div>

      <div class="grid grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-semibold text-gray-700">Timeline</label>
          <input type="text" name="timeline" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" required>
        </div>
        <div>
          <label class="block text-sm font-semibold text-gray-700">Pricing</label>
          <input type="text" name="pricing" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" required>
        </div>
      </div>

      <div>
        <label class="block text-sm font-semibold text-gray-700">Deliverables</label>
        <textarea name="deliverables" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" required></textarea>
      </div>

      <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition font-semibold">
        📄 Generate PDF
      </button>
    </form>
  </div>
</body>
</html>