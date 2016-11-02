    $(document).ready(function(){
						//code here...
						var code = $(".codemirror-textarea")[0];
						var editor = CodeMirror.fromTextArea(code, {
						value: "#test {\n\tposition: absolute;\n\twidth: auto;\n\theight: 50px;\n}",
                        mode: "xml",
                        
                        autoCloseBrackets: true,
                        hardWrap:true,
                        keymap : "sublime",
                        matchBrackets: true,
                        autoClearEmptyLines: true,
                        tabSize: 5,
                        lineNumbers: true,
                        firstLineNumber: 1,
                        lineWrapping: true,
                        extraKeys: {"Ctrl-Space": "autocomplete"},
						theme : "neo",
                        foldGutter: {
                            rangeFinder: new CodeMirror.fold.combine(CodeMirror.fold.brace, CodeMirror.fold.comment)
                                },
                                gutters: ["CodeMirror-linenumbers", "CodeMirror-foldgutter"]
                        });
					});