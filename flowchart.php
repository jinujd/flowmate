<?php require "header.php"; ?>

<div class="container design-layout" id="content">

  <div class="row">
    <div class="frame-6">
      <!--Flow chart elements -->
      <h4>Flowchart Modal</h4>
      ---------------------------
      <br/><br/>

        <a href="#" data-toggle="modal" data-target="#flowchart">Flowchart Modal</a>
        <br/><br/>
        <br/><br/>

      <h4>Flowchart Elements</h4>
      ---------------------------
      <br/><br/>

      <h5>Start node</h5>
      <div class="start-node">
        <div class="node-header">
          <!-- <h1>Start</h1> -->
          <!-- Either you can use p, heading, if you need to edit give text input -->
          <input type="text" class="form-control node-content" placeholder="Start">
        </div>
        <div class="node-body">
        <textarea class="form-control" placeholder="The start node of the workflow"></textarea><!-- Either you can use p, heading, if you need to edit give text input, textarea -->
          <!-- <input type="text" class="form-control node-content" placeholder="The start node of the workflow"> -->
        </div>
      </div>
      <br/><br/>
      <h5>Node</h5>
      <div class="node">
        <div class="node-header">
          <div class="row">
            <div class="frame-8 frame-md-8 frame-sm-8 frame-xs-8 frame">
              <!-- <h1>Approve comment pro..</h1> -->
              <input type="text" class="form-control node-content" placeholder="Approve comment pro..">
            </div>
            <div class="frame-4 frame-md-4 frame-sm-4 frame-xs-4 frame">
              <button class="tiny-img-btn right-arrow-btn"><img src="./images/right-dropdown-btn.png" alt=""></button>
            </div>
          </div>
        </div>
        <div class="node-body">
          <!-- <input type="text" class="form-control node-content" placeholder="The start node of the workflow"> -->
          <textarea class="form-control" placeholder="The start node of the workflow"></textarea>
        </div>
      </div>
      <br/>
      <br/>
      <br/>
    </div>
    <div class="frame-6">
      <h5>Flowchart shapes</h5>
      -------------------
      <ul>
        <li style="margin-bottom: 20px">Rectangle<div class="rectangle"></div></li>
        <li style="margin-bottom: 20px">Circle<div class="circle"></div></li>
        <li style="margin-bottom: 20px">Square<div class="square"></div></li>
        <li style="margin-bottom: 20px">Condition (diamond)<div class="diamond" style="margin-top: 10px"></div></li>
        <li style="margin-bottom: 20px">Oval<div class="oval"></div></li>
      </ul>

      <br/>
      <br/>
      <br/>
    </div>
  </div>

  <!--Flow chart modal starts here -->
  <div class="modal fade no-bg-modal" id="flowchart" tabindex="-1" role="dialog" aria-labelledby="flowchart" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <ul class="user-helpers">
            <li><a href="#">Save</a></li>
            <li><a href="#">Comment moderation</a></li>
            <li><a href="#">1.0</a></li>
            <li><a href="#">Moderation of user con</a></li>
            <li><a href="#">collab</a></li>
          </ul>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="p-0 frame-2 frame-md-2 frame-prim m-r-8 md-margin">
              <!-- Frame header -->
              <div class="frame-header b-b-0">
                <div class="form-group search-box">
                  <input type="text" class="search-input form-control" placeholder="Search">
                  <img src="./images/search-placeholder.png" alt="Search" class="icon-placeholder">
                  <div class="sicon-hold">
                    <button type="submit"><img src="./images/search.png" alt="Submit search"></button>
                  </div>
                </div>
               </div>
              <!-- Frame header end -->
              <div class="panel-group" id="flowchart" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="flowchart-tab">
                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#flowchart" href="#flowchart-content" aria-expanded="true" aria-controls="collapseOne">
                        Flowchart
                      </a>
                    </h4>
                  </div>
                  <div id="flowchart-content" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="flowchart-tab">
                    <div class="panel-body">
                      <ul class="pallete">
                        <li>
                          <div class="rectangle" id="winston"></div>
                        </li>
                        <!-- <li ondrop="drop(event)" ondragover="allowDrop(event)" style="width: 100px; height: 50px">
                          <div class="rectangle" draggable="true" ondragstart="drag(event)" id="drag1"></div>
                        </li> -->
                        <li><div class="circle"></div></li>
                        <li><div class="square"></div></li>
                        <li><div class="diamond"></div></li>
                        <li><div class="oval"></div></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame-10 frame-md-10 frame-sm-10 frame-xs-10 bg-white">
              <!-- <div ondrop="drop(event)" ondragover="allowDrop(event)" style="width: 100%; height: 100%;" id="dropzone"></div> -->
              <div style="width: 100%; height: 100%;" id="dropzone"></div>
              <div class="start-node node">
                <div class="node-header">
                  <h1>Start</h1>
                </div>
                <div class="node-body">
                  <p>The start node of the workflow</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="bt bt-primary">Select</button>
          <button type="button" class="bt bt-primary btn-cancel" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Flow chart modal ends here -->


</div>

<div id="sample" style="display: none">
  <div style="width: 100%; display: flex; justify-content: space-between">
    <div id="myPaletteDiv" style="width: 100px; margin-right: 2px; background-color: whitesmoke; border: solid 1px black"></div>
    <div id="myDiagramDiv" style="flex-grow: 1; height: 750px; border: solid 1px black"></div>
  </div>
  <button id="SaveButton" onclick="save()">Save</button>
  <button onclick="load()">Load</button>
  Diagram Model saved in JSON format:
  <textarea id="mySavedModel" style="width:100%;height:300px">
    { "class": "go.GraphLinksModel",
      "linkFromPortIdProperty": "fromPort",
      "linkToPortIdProperty": "toPort",
      "nodeDataArray": [
    {"category":"Comment", "loc":"360 -10", "text":"Kookie Brittle", "key":-13},
    {"key":-1, "category":"Start", "loc":"175 0", "text":"Start"},
    {"key":0, "loc":"-5 75", "text":"Preheat oven to 375 F"},
    {"key":1, "loc":"175 100", "text":"In a bowl, blend: 1 cup margarine, 1.5 teaspoon vanilla, 1 teaspoon salt"},
    {"key":2, "loc":"175 200", "text":"Gradually beat in 1 cup sugar and 2 cups sifted flour"},
    {"key":3, "loc":"175 290", "text":"Mix in 6 oz (1 cup) Nestle's Semi-Sweet Chocolate Morsels"},
    {"key":4, "loc":"175 380", "text":"Press evenly into ungreased 15x10x1 pan"},
    {"key":5, "loc":"355 85", "text":"Finely chop 1/2 cup of your choice of nuts"},
    {"key":6, "loc":"175 450", "text":"Sprinkle nuts on top"},
    {"key":7, "loc":"175 515", "text":"Bake for 25 minutes and let cool"},
    {"key":8, "loc":"175 585", "text":"Cut into rectangular grid"},
    {"key":-2, "category":"End", "loc":"175 660", "text":"Enjoy!"}
     ],
      "linkDataArray": [
    {"from":1, "to":2, "fromPort":"B", "toPort":"T"},
    {"from":2, "to":3, "fromPort":"B", "toPort":"T"},
    {"from":3, "to":4, "fromPort":"B", "toPort":"T"},
    {"from":4, "to":6, "fromPort":"B", "toPort":"T"},
    {"from":6, "to":7, "fromPort":"B", "toPort":"T"},
    {"from":7, "to":8, "fromPort":"B", "toPort":"T"},
    {"from":8, "to":-2, "fromPort":"B", "toPort":"T"},
    {"from":-1, "to":0, "fromPort":"B", "toPort":"T"},
    {"from":-1, "to":1, "fromPort":"B", "toPort":"T"},
    {"from":-1, "to":5, "fromPort":"B", "toPort":"T"},
    {"from":5, "to":4, "fromPort":"B", "toPort":"T"},
    {"from":0, "to":4, "fromPort":"B", "toPort":"T"}
     ]}
  </textarea>
  <button onclick="printDiagram()">Print Diagram Using SVG</button>
</div>
<script>

  //drag and drop script starts here
    // function allowDrop(ev) {
    //   ev.preventDefault();
    // }
    //
    // function drag(ev) {
    //   ev.dataTransfer.setData("text", ev.target.id);
    // }
    //
    // function drop(ev) {
    //   ev.preventDefault();
    //   var data = ev.dataTransfer.getData("text");
    //   ev.target.appendChild(document.getElementById(data));
    // }
    //drag and drop script ends here

  function init() {
      if (window.goSamples) goSamples();  // init for these samples -- you don't need to call this
      var $ = go.GraphObject.make;  // for conciseness in defining templates

      myDiagram =
        $(go.Diagram, "myDiagramDiv",  // must name or refer to the DIV HTML element
          {
            "LinkDrawn": showLinkLabel,  // this DiagramEvent listener is defined below
            "LinkRelinked": showLinkLabel,
            "undoManager.isEnabled": true  // enable undo & redo
          });

      // when the document is modified, add a "*" to the title and enable the "Save" button
      myDiagram.addDiagramListener("Modified", function(e) {
        var button = document.getElementById("SaveButton");
        if (button) button.disabled = !myDiagram.isModified;
        var idx = document.title.indexOf("*");
        if (myDiagram.isModified) {
          if (idx < 0) document.title += "*";
        } else {
          if (idx >= 0) document.title = document.title.substr(0, idx);
        }
      });

      // helper definitions for node templates

      function nodeStyle() {
        return [
          // The Node.location comes from the "loc" property of the node data,
          // converted by the Point.parse static method.
          // If the Node.location is changed, it updates the "loc" property of the node data,
          // converting back using the Point.stringify static method.
          new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
          {
            // the Node.location is at the center of each node
            locationSpot: go.Spot.Center
          }
        ];
      }

      // Define a function for creating a "port" that is normally transparent.
      // The "name" is used as the GraphObject.portId,
      // the "align" is used to determine where to position the port relative to the body of the node,
      // the "spot" is used to control how links connect with the port and whether the port
      // stretches along the side of the node,
      // and the boolean "output" and "input" arguments control whether the user can draw links from or to the port.
      function makePort(name, align, spot, output, input) {
        var horizontal = align.equals(go.Spot.Top) || align.equals(go.Spot.Bottom);
        // the port is basically just a transparent rectangle that stretches along the side of the node,
        // and becomes colored when the mouse passes over it
        return $(go.Shape,
          {
            fill: "transparent",  // changed to a color in the mouseEnter event handler
            strokeWidth: 0,  // no stroke
            width: horizontal ? NaN : 8,  // if not stretching horizontally, just 8 wide
            height: !horizontal ? NaN : 8,  // if not stretching vertically, just 8 tall
            alignment: align,  // align the port on the main Shape
            stretch: (horizontal ? go.GraphObject.Horizontal : go.GraphObject.Vertical),
            portId: name,  // declare this object to be a "port"
            fromSpot: spot,  // declare where links may connect at this port
            fromLinkable: output,  // declare whether the user may draw links from here
            toSpot: spot,  // declare where links may connect at this port
            toLinkable: input,  // declare whether the user may draw links to here
            cursor: "pointer",  // show a different cursor to indicate potential link point
            mouseEnter: function(e, port) {  // the PORT argument will be this Shape
              if (!e.diagram.isReadOnly) port.fill = "rgba(255,0,255,0.5)";
            },
            mouseLeave: function(e, port) {
              port.fill = "transparent";
            }
          });
      }

      function textStyle() {
        return {
          font: "bold 11pt Helvetica, Arial, sans-serif",
          stroke: "whitesmoke"
        }
      }

      // define the Node templates for regular nodes

      myDiagram.nodeTemplateMap.add("",  // the default category
        $(go.Node, "Table", nodeStyle(),
          // the main object is a Panel that surrounds a TextBlock with a rectangular Shape
          $(go.Panel, "Auto",
            $(go.Shape, "Rectangle",
              { fill: "#00A9C9", strokeWidth: 0 },
              new go.Binding("figure", "figure")),
            $(go.TextBlock, textStyle(),
              {
                margin: 8,
                maxSize: new go.Size(160, NaN),
                wrap: go.TextBlock.WrapFit,
                editable: true
              },
              new go.Binding("text").makeTwoWay())
          ),
          // four named ports, one on each side:
          makePort("T", go.Spot.Top, go.Spot.TopSide, false, true),
          makePort("L", go.Spot.Left, go.Spot.LeftSide, true, true),
          makePort("R", go.Spot.Right, go.Spot.RightSide, true, true),
          makePort("B", go.Spot.Bottom, go.Spot.BottomSide, true, false)
        ));

      myDiagram.nodeTemplateMap.add("Conditional",
        $(go.Node, "Table", nodeStyle(),
          // the main object is a Panel that surrounds a TextBlock with a rectangular Shape
          $(go.Panel, "Auto",
            $(go.Shape, "Diamond",
              { fill: "#00A9C9", strokeWidth: 0 },
              new go.Binding("figure", "figure")),
            $(go.TextBlock, textStyle(),
              {
                margin: 8,
                maxSize: new go.Size(160, NaN),
                wrap: go.TextBlock.WrapFit,
                editable: true
              },
              new go.Binding("text").makeTwoWay())
          ),
          // four named ports, one on each side:
          makePort("T", go.Spot.Top, go.Spot.Top, false, true),
          makePort("L", go.Spot.Left, go.Spot.Left, true, true),
          makePort("R", go.Spot.Right, go.Spot.Right, true, true),
          makePort("B", go.Spot.Bottom, go.Spot.Bottom, true, false)
        ));

      myDiagram.nodeTemplateMap.add("Start",
        $(go.Node, "Table", nodeStyle(),
          $(go.Panel, "Auto",
            $(go.Shape, "Circle",
              { minSize: new go.Size(40, 40), fill: "#79C900", strokeWidth: 0 }),
            $(go.TextBlock, "Start", textStyle(),
              new go.Binding("text"))
          ),
          // three named ports, one on each side except the top, all output only:
          makePort("L", go.Spot.Left, go.Spot.Left, true, false),
          makePort("R", go.Spot.Right, go.Spot.Right, true, false),
          makePort("B", go.Spot.Bottom, go.Spot.Bottom, true, false)
        ));

      myDiagram.nodeTemplateMap.add("End",
        $(go.Node, "Table", nodeStyle(),
          $(go.Panel, "Auto",
            $(go.Shape, "Circle",
              { minSize: new go.Size(40, 40), fill: "#DC3C00", strokeWidth: 0 }),
            $(go.TextBlock, "End", textStyle(),
              new go.Binding("text"))
          ),
          // three named ports, one on each side except the bottom, all input only:
          makePort("T", go.Spot.Top, go.Spot.Top, false, true),
          makePort("L", go.Spot.Left, go.Spot.Left, false, true),
          makePort("R", go.Spot.Right, go.Spot.Right, false, true)
        ));

      // taken from ../extensions/Figures.js:
      go.Shape.defineFigureGenerator("File", function(shape, w, h) {
        var geo = new go.Geometry();
        var fig = new go.PathFigure(0, 0, true); // starting point
        geo.add(fig);
        fig.add(new go.PathSegment(go.PathSegment.Line, .75 * w, 0));
        fig.add(new go.PathSegment(go.PathSegment.Line, w, .25 * h));
        fig.add(new go.PathSegment(go.PathSegment.Line, w, h));
        fig.add(new go.PathSegment(go.PathSegment.Line, 0, h).close());
        var fig2 = new go.PathFigure(.75 * w, 0, false);
        geo.add(fig2);
        // The Fold
        fig2.add(new go.PathSegment(go.PathSegment.Line, .75 * w, .25 * h));
        fig2.add(new go.PathSegment(go.PathSegment.Line, w, .25 * h));
        geo.spot1 = new go.Spot(0, .25);
        geo.spot2 = go.Spot.BottomRight;
        return geo;
      });

      myDiagram.nodeTemplateMap.add("Comment",
        $(go.Node, "Auto", nodeStyle(),
          $(go.Shape, "File",
            { fill: "#DEE0A3", strokeWidth: 0 }),
          $(go.TextBlock, textStyle(),
            {
              margin: 5,
              maxSize: new go.Size(200, NaN),
              wrap: go.TextBlock.WrapFit,
              textAlign: "center",
              editable: true,
              font: "bold 12pt Helvetica, Arial, sans-serif",
              stroke: '#454545'
            },
            new go.Binding("text").makeTwoWay())
          // no ports, because no links are allowed to connect with a comment
        ));


      // replace the default Link template in the linkTemplateMap
      myDiagram.linkTemplate =
        $(go.Link,  // the whole link panel
          {
            routing: go.Link.AvoidsNodes,
            curve: go.Link.JumpOver,
            corner: 5, toShortLength: 4,
            relinkableFrom: true,
            relinkableTo: true,
            reshapable: true,
            resegmentable: true,
            // mouse-overs subtly highlight links:
            mouseEnter: function(e, link) { link.findObject("HIGHLIGHT").stroke = "rgba(30,144,255,0.2)"; },
            mouseLeave: function(e, link) { link.findObject("HIGHLIGHT").stroke = "transparent"; },
            selectionAdorned: false
          },
          new go.Binding("points").makeTwoWay(),
          $(go.Shape,  // the highlight shape, normally transparent
            { isPanelMain: true, strokeWidth: 8, stroke: "transparent", name: "HIGHLIGHT" }),
          $(go.Shape,  // the link path shape
            { isPanelMain: true, stroke: "gray", strokeWidth: 2 },
            new go.Binding("stroke", "isSelected", function(sel) { return sel ? "dodgerblue" : "gray"; }).ofObject()),
          $(go.Shape,  // the arrowhead
            { toArrow: "standard", strokeWidth: 0, fill: "gray" }),
          $(go.Panel, "Auto",  // the link label, normally not visible
            { visible: false, name: "LABEL", segmentIndex: 2, segmentFraction: 0.5 },
            new go.Binding("visible", "visible").makeTwoWay(),
            $(go.Shape, "RoundedRectangle",  // the label shape
              { fill: "#F8F8F8", strokeWidth: 0 }),
            $(go.TextBlock, "Yes",  // the label
              {
                textAlign: "center",
                font: "10pt helvetica, arial, sans-serif",
                stroke: "#333333",
                editable: true
              },
              new go.Binding("text").makeTwoWay())
          )
        );

      // Make link labels visible if coming out of a "conditional" node.
      // This listener is called by the "LinkDrawn" and "LinkRelinked" DiagramEvents.
      function showLinkLabel(e) {
        var label = e.subject.findObject("LABEL");
        if (label !== null) label.visible = (e.subject.fromNode.data.category === "Conditional");
      }

      // temporary links used by LinkingTool and RelinkingTool are also orthogonal:
      myDiagram.toolManager.linkingTool.temporaryLink.routing = go.Link.Orthogonal;
      myDiagram.toolManager.relinkingTool.temporaryLink.routing = go.Link.Orthogonal;

      load();  // load an initial diagram from some JSON text

      // initialize the Palette that is on the left side of the page
      myPalette =
        $(go.Palette, "myPaletteDiv",  // must name or refer to the DIV HTML element
          {
            nodeTemplateMap: myDiagram.nodeTemplateMap,  // share the templates used by myDiagram
            model: new go.GraphLinksModel([  // specify the contents of the Palette
              { category: "Start", text: "Start" },
              { text: "Step" },
              { category: "Conditional", text: "???" },
              { category: "End", text: "End" },
              { category: "Comment", text: "Comment" }
            ])
          });
    } // end init


    // Show the diagram's model in JSON format that the user may edit
    function save() {
      document.getElementById("mySavedModel").value = myDiagram.model.toJson();
      myDiagram.isModified = false;
    }
    function load() {
      myDiagram.model = go.Model.fromJson(document.getElementById("mySavedModel").value);
    }

    // print the diagram by opening a new window holding SVG images of the diagram contents for each page
    function printDiagram() {
      var svgWindow = window.open();
      if (!svgWindow) return;  // failure to open a new Window
      var printSize = new go.Size(700, 960);
      var bnds = myDiagram.documentBounds;
      var x = bnds.x;
      var y = bnds.y;
      while (y < bnds.bottom) {
        while (x < bnds.right) {
          var svg = myDiagram.makeSVG({ scale: 1.0, position: new go.Point(x, y), size: printSize });
          svgWindow.document.body.appendChild(svg);
          x += printSize.width;
        }
        x = bnds.x;
        y += printSize.height;
      }
      setTimeout(function() { svgWindow.print(); }, 1);
    }

</script>
<?php require "footer.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- Also include jQueryUI -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script>
  $("#winston").draggable();
  $("#dropzone").droppable({
      drop: function(event, ui) {
          // $(this).css('background', 'rgb(0,200,0)');
          // $(this).html(htmlContent);
      },
      over: function(event, ui) {
          // $(this).css('background', 'orange');
          // $(this).html(htmlContent);
      },
      out: function(event, ui) {
          // $(this).css('background', 'cyan');
          // $(this).html(htmlContent);
      }
  });
</script>
