<!DOCTYPE html>
<html>
    <head>
        <title>Modal Verbs Annotation Platform</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
    </head>
    <body>
        <div class="row" style="text-align: center; color: #11866f;">
            <h2>Modal Verbs Annotation Platform</h2>
        </div>
        <br>
        <div class="container-fluid">
            <div class="col-lg-2">
                <h4>選擇欲標註的文本</h4>
                <select class="form-control" id="select">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <table class="table table-striped table-hover ">
                <thead>
                    <tr class="active">
                        <th class="col-md-1">ID</th>
                        <th class="col-md-4">前句</th>
                        <th class="col-md-1">情態動詞</th>
                        <th class="col-md-4">後句</th>
                        <!--<th class="col-md-1">標註</th>-->
                <th class="col-lg-2">
                    <select class="form-control" id="select">
                        <option>ability</option>
                        <option>epistemic uncertainty</option>
                        <option>circumstantial possibilty</option>
                        <option>permission</option>
                        <option>obligation</option>
                        <option>need</option>
                    </select>
                </th>
                </tr>
                </thead>
                <tbody>
                    <tr class="active">
                        <td>1</td>
                        <td>Column content</td>
                        <td>Column content</td>
                        <td>Column content</td>
                    </tr>
                    <tr class="active">
                        <td>2</td>
                        <td>Column content</td>
                        <td>Column content</td>
                        <td>Column content</td>
                    </tr>
                    <tr class="active">
                        <td>3</td>
                        <td>Column content</td>
                        <td>Column content</td>
                        <td>Column content</td>
                    </tr>
                </tbody>
            </table> 
        </div>
        <div class="form-group">
            <div class="col-md-2">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <script type="text/javascript" src="bootstrap.min.jsb"></script>
    </body>
</html>