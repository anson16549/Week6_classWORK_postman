async function fetchData(datasource) {
    let resource = await fetch(datasource).then(response => {
        // bang operator - means "does not equal (!==)"
        if (response.status !== 200) {
            throw new Error(`Danger Will Robinson! Here there be monsters! Error ${response.status}`);
        }
        return response;

    })

    //if we get success, then we can return back our resource afetr e parse it into plain Js
    // fetch uses the Pormise API, so it'll return with the resource or return false
    // we'll assume success and pass through a pared JV object from the JSON
    let datatset = await resource.json();

    return datatset;
}

async function postData(sourceURL) {
    // use fetch or Axios to post to a database here
}
export { fetchData };