<?phpnamespace Objects\Maps;use Objects\Maps\SetOptionInterface;class Address implements SetOptionInterface{    protected $url = "https://us1.locationiq.com/v1/search.php";    public function getUrl()    {        return $this->url;    }    public function options($data)    {        // TODO: Implement options() method.        if (!empty($data->address)) {            return ['q' => $data->address];        }        return null;    }}