# Junior - A JSON-RPC Client/Server in PHP

## What is JSON-RPC?
From the [JSON-RPC Spec](http://www.jsonrpc.org/spec.html):

JSON-RPC is a stateless, light-weight remote procedure call (RPC) protocol. Primarily this specification defines several data structures and the rules around their processing. 
It is transport agnostic in that the concepts can be used within the same process, over sockets, over http, or in many various message passing environments. It uses JSON (RFC 4627) 
as data format.
It is designed to be simple!

## Why should I use Junior?
Junior is JSON-RPC 2.0 viable and follows the JSON-RPC spec as of July 2011. It supports batching, named parameters, and notifications.

## Is Junior available via Pear?
Junior was previously hosted on Pearhub but I've encountered some pretty serious issues trying to update the version there. If anyone can suggest a better place to host I'd be happy to put the latest version of Junior back on Pear.

## How do I use the client?
Include client.php in the base directory of Junior, which will include all necessary files. Create a new instance of Junior\Client\Client() and pass it the URI of the server 
you wish to communicate with. All communication through this instance. See the example folder for more details.

## How do I use the server?
Include the server.php in the base directory of Junior, which will include all necessary files. Create a new instance of Junior\Server\Server() and pass it an instance 
of the class you wish to expose for communication. Then call the process() function on your server instance and you are ready to go! See the example folder for more details. 

## What if I don't like PHP?
Try out [Jimson](https://github.com/chriskite/jimson), written by Chris Kite for Ruby. It was made at the same time as Junior, and supports all the same features.

## What do I need to run Junior?
* PHP >= 5.3

## Does it have tests?
Yes, but unfortunately they appear to have broken for me with the latest version of PHPUnit. Getting them working again is a priority.
